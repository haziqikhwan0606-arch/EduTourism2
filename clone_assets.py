import os
import re
import json
import urllib.request
import urllib.error
from concurrent.futures import ThreadPoolExecutor

BASE_DIR = os.path.abspath(os.path.dirname(__file__))

# 1. Base asset lists
assets = set([
    # Fonts
    "wp-content/themes/unseen/resources/assets/fonts/NeueMontreal-Regular.woff2",
    "wp-content/themes/unseen/resources/assets/fonts/NeueMontreal-Regular.woff",
    "wp-content/themes/unseen/resources/assets/fonts/SaolDisplay-Light.woff2",
    "wp-content/themes/unseen/resources/assets/fonts/SaolDisplay-Light.woff",
    "wp-content/themes/unseen/resources/assets/fonts/SaolDisplay-LightItalic.woff2",
    "wp-content/themes/unseen/resources/assets/fonts/SaolDisplay-LightItalic.woff",

    # Favicons & Icons
    "wp-content/themes/unseen/public/favicon/apple-touch-icon.png",
    "wp-content/themes/unseen/public/favicon/favicon-32x32.png",
    "wp-content/themes/unseen/public/favicon/favicon-16x16.png",
    "wp-content/themes/unseen/public/favicon/safari-pinned-tab.svg",
    "wp-content/themes/unseen/resources/assets/images/eyes-180x180.png",
    "wp-content/themes/unseen/resources/assets/images/eyes-32x32.png",
    "wp-content/themes/unseen/resources/assets/images/eyes-16x16.png",

    # SVGs
    "wp-content/themes/unseen/public/images/svgsprite.svg",
    "wp-content/themes/unseen/resources/assets/svg-sprite/arrow.svg",

    # Audio sprites
    "wp-content/themes/unseen/resources/assets/audio/audio.mp3",
    "wp-content/themes/unseen/resources/assets/audio/audio.webm",

    # Scripts & Styles
    "wp-content/themes/unseen/public/scripts/manifest.js",
    "wp-content/themes/unseen/public/scripts/vendor.js",
    "wp-content/themes/unseen/public/scripts/theme.js",
    "wp-content/themes/unseen/public/css/style.css",

    # 3D models (Home / Room / Decor)
    "wp-content/themes/unseen/resources/assets/models/home/room-1.glb",
    "wp-content/themes/unseen/resources/assets/models/home/room-2.glb",
    "wp-content/themes/unseen/resources/assets/models/home/chair.glb",
    "wp-content/themes/unseen/resources/assets/models/home/pillows.glb",
    "wp-content/themes/unseen/resources/assets/models/home/rocks.glb",
    "wp-content/themes/unseen/resources/assets/models/home/table-3.glb",
    "wp-content/themes/unseen/resources/assets/models/home/land-group.glb",
    "wp-content/themes/unseen/resources/assets/models/home/grass-simple.glb",
    "wp-content/themes/unseen/resources/assets/models/home/objectsData.glb",
    "wp-content/themes/unseen/resources/assets/models/phone.glb",
    "wp-content/themes/unseen/resources/assets/models/project-menu/arch-dc.glb",
    "wp-content/themes/unseen/resources/assets/models/project-menu/butterfly.glb",
    "wp-content/themes/unseen/resources/assets/models/project-menu/floor-dc.glb",
    "wp-content/themes/unseen/resources/assets/models/world/grab.glb",
    "wp-content/themes/unseen/resources/assets/models/world/grabbing.glb",
    "wp-content/themes/unseen/resources/assets/models/world/pointer.glb",

    # Awards models
    "wp-content/themes/unseen/resources/assets/models/awards/awwwards.glb",
    "wp-content/themes/unseen/resources/assets/models/awards/css.glb",
    "wp-content/themes/unseen/resources/assets/models/awards/euro.glb",
    "wp-content/themes/unseen/resources/assets/models/awards/fwa.glb",
    "wp-content/themes/unseen/resources/assets/models/awards/lovie.glb",
    "wp-content/themes/unseen/resources/assets/models/awards/webby.glb",
    "wp-content/themes/unseen/resources/assets/models/awards/generic.glb",

    # Textures & Images
    "wp-content/themes/unseen/resources/assets/images/gradient-noise.jpg",
    "wp-content/themes/unseen/resources/assets/images/home/blade.jpg",
    "wp-content/themes/unseen/resources/assets/images/iri-32.png",
    "wp-content/themes/unseen/resources/assets/images/matcap-black.png",
    "wp-content/themes/unseen/resources/assets/images/matcap-white.png",
    "wp-content/themes/unseen/resources/assets/images/noise-small.png",
    "wp-content/themes/unseen/resources/assets/images/project-menu/butterfly-atlas-diffuse-1.png",
    "wp-content/themes/unseen/resources/assets/images/project-menu/butterfly-atlas-normal-1.png",
    "wp-content/themes/unseen/resources/assets/images/project-menu/sand-rotate.jpg",
    "wp-content/themes/unseen/resources/assets/images/project-model-matcap-dark.png",
    "wp-content/themes/unseen/resources/assets/images/project-model-matcap.png",
    "wp-content/themes/unseen/resources/assets/images/world/grab.png",
    "wp-content/themes/unseen/resources/assets/images/world/grabbing.png",
    "wp-content/themes/unseen/resources/assets/images/world/pointer.png",

    # KTX2 textures
    "wp-content/themes/unseen/resources/assets/images/home/room-1.ktx2",
    "wp-content/themes/unseen/resources/assets/images/home/room-2.ktx2",
    "wp-content/themes/unseen/resources/assets/images/home/chair.ktx2",
    "wp-content/themes/unseen/resources/assets/images/home/pillows.ktx2",
    "wp-content/themes/unseen/resources/assets/images/home/rocks.ktx2",
    "wp-content/themes/unseen/resources/assets/images/home/table.ktx2",
    "wp-content/themes/unseen/resources/assets/images/home/pearl-matcap.ktx2",
    "wp-content/themes/unseen/resources/assets/images/home/particles.ktx2",
    "wp-content/themes/unseen/resources/assets/images/home/skymap-tile.ktx2",
    "wp-content/themes/unseen/resources/assets/images/home/ao.ktx2",
    "wp-content/themes/unseen/resources/assets/images/project-menu/arch.ktx2",

    # Basis & Draco decoders
    "wp-content/themes/unseen/resources/assets/basis/basis_transcoder.js",
    "wp-content/themes/unseen/resources/assets/basis/basis_transcoder.wasm",
    "wp-content/themes/unseen/resources/assets/basis/msc_basis_transcoder.js",
    "wp-content/themes/unseen/resources/assets/basis/msc_basis_transcoder.wasm",
    "wp-content/themes/unseen/resources/assets/draco/draco_decoder.js",
    "wp-content/themes/unseen/resources/assets/draco/draco_decoder.wasm",
    "wp-content/themes/unseen/resources/assets/draco/draco_wasm_wrapper.js",

    # Uploads
    "wp-content/uploads/2022/11/social-meta.jpg"
])

# 2. Extract from projects array
if os.path.exists("unseen_index.html"):
    with open("unseen_index.html", "r", encoding="utf-8") as f:
        html = f.read()
    idx = html.find("projects = [")
    if idx != -1:
        end = html.find("</script>", idx)
        raw = html[idx+11:end].strip()
        if raw.endswith(";"):
            raw = raw[:-1]
        try:
            pdata = json.loads(raw)
            for p in pdata:
                imgs = p.get("images")
                if isinstance(imgs, list):
                    for img in imgs:
                        if isinstance(img, dict) and "image" in img:
                            u = img["image"].replace("https://unseen.co/", "").lstrip("/")
                            assets.add(u)
                mdls = p.get("models")
                if isinstance(mdls, list):
                    for mdl in mdls:
                        if isinstance(mdl, dict) and "model" in mdl:
                            u = mdl["model"].replace("https://unseen.co/", "").lstrip("/")
                            assets.add(u)
        except Exception as e:
            print("Error parsing projects:", e)

print(f"Total unique assets to download: {len(assets)}")

headers = {
    "User-Agent": "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36"
}

def download_asset(rel_path):
    # clean query string
    clean_path = rel_path.split("?")[0]
    out_path = os.path.join(BASE_DIR, clean_path)
    if os.path.exists(out_path) and os.path.getsize(out_path) > 0:
        return f"[EXISTS] {clean_path}"

    os.makedirs(os.path.dirname(out_path), exist_ok=True)
    url = f"https://unseen.co/{clean_path}"
    req = urllib.request.Request(url, headers=headers)
    try:
        with urllib.request.urlopen(req, timeout=15) as resp:
            data = resp.read()
            with open(out_path, "wb") as f:
                f.write(data)
        return f"[OK {len(data)}B] {clean_path}"
    except urllib.error.HTTPError as he:
        return f"[HTTP {he.code}] {clean_path}"
    except Exception as ex:
        return f"[ERR {ex}] {clean_path}"

with ThreadPoolExecutor(max_workers=8) as executor:
    results = list(executor.map(download_asset, sorted(assets)))

for r in results:
    if "[OK" in r or "[ERR" in r or "[HTTP" in r:
        print(r)

