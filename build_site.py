import os
import re

BASE_DIR = os.path.abspath(os.path.dirname(__file__))

# 1. Patch theme.js
theme_js_path = os.path.join(BASE_DIR, "wp-content/themes/unseen/public/scripts/theme.js")
if os.path.exists(theme_js_path):
    with open(theme_js_path, "r", encoding="utf-8") as f:
        tjs = f.read()

    # Make canvasArrow use assetsUrl
    tjs = tjs.replace(
        'this.canvasArrow.src="/wp-content/themes/unseen/resources/assets/svg-sprite/arrow.svg"',
        'this.canvasArrow.src=o.assetsUrl+"svg-sprite/arrow.svg"'
    )

    # Make favicon switcher use assetsUrl and publicUrl
    tjs = tjs.replace(
        'e.href="/wp-content/themes/unseen/resources/assets/images/eyes-"+e.sizes+".png?="+Math.random()',
        'e.href=(o.assetsUrl||"wp-content/themes/unseen/resources/assets/")+"images/eyes-"+e.sizes+".png?="+Math.random()'
    )
    tjs = tjs.replace(
        'e.href="/wp-content/themes/unseen/public/favicon/favicon-"+e.sizes+".png?="+Math.random()',
        'e.href=(o.publicUrl||"wp-content/themes/unseen/public/")+"favicon/favicon-"+e.sizes+".png?="+Math.random()'
    )

    # Patch pathname comparison in theme.js
    tjs = tjs.replace(
        '"/"===o.Highway.location.pathname',
        '["/",""].includes(o.Highway.location.pathname.replace(/^\\/[^/]+(?=\\/?$)/,"/"))'
    )
    tjs = tjs.replace(
        'null!==o.Highway.location.pathname.match(/^\\/$/)',
        'null!==o.Highway.location.pathname.replace(/^\\/[^/]+(?=\\/?$)/,"/").match(/^\\/$/)'
    )

    with open(theme_js_path, "w", encoding="utf-8") as f:
        f.write(tjs)
    print("theme.js patched successfully.")

# 2. Patch vendor.js
vendor_js_path = os.path.join(BASE_DIR, "wp-content/themes/unseen/public/scripts/vendor.js")
if os.path.exists(vendor_js_path):
    with open(vendor_js_path, "r", encoding="utf-8") as f:
        vjs = f.read()

    # Patch getPathname to normalize any subfolder
    old_get_pathname = 's.prototype.getPathname=function(t){var e=t.match(/https?:\\/\\/.*?(\\/[\\w_\\-./]+)/);return e?e[1]:"/"}'
    new_get_pathname = 's.prototype.getPathname=function(t){var e=t.match(/https?:\\/\\/.*?(\\/[\\w_\\-./]+)/);var p=e?e[1]:"/";return p.replace(/^\\/[^/]+(?=\\/(?:contact|projects|world)\\b)/,"").replace(/^\\/[^/]+(?=\\/?$)/,"/");}'
    
    if old_get_pathname in vjs:
        vjs = vjs.replace(old_get_pathname, new_get_pathname)
        with open(vendor_js_path, "w", encoding="utf-8") as f:
            f.write(vjs)
        print("vendor.js getPathname patched successfully.")
    else:
        print("Note: getPathname pattern in vendor.js already patched or differs.")

# 3. HTML Processor function
def process_html(src_file, depth=0):
    with open(src_file, "r", encoding="utf-8") as f:
        html = f.read()

    prefix = "../" * depth

    # Remove external trackers/analytics
    html = re.sub(r'<script async src="https://www\.googletagmanager\.com/.*?></script>', '', html)
    html = re.sub(r'<script>\s*window\.dataLayer\s*=.*?</script>', '<script>window.dataLayer=[];function gtag(){}</script>', html, flags=re.DOTALL)
    html = re.sub(r'<script type=.*insightful-cloud-365.*?</script>', '', html)
    html = re.sub(r'<noscript><img src="https://secure\.insightful-cloud-365\.com/.*?</noscript>', '', html)

    # Replace absolute unseen.co asset URLs with relative or root-relative paths
    html = html.replace("https://unseen.co/wp-content/", prefix + "wp-content/")
    html = html.replace("/wp-content/", prefix + "wp-content/")

    # Fix theme-js-extra script
    theme_js_extra = f"""<script id="theme-js-extra">
var basePath = (function() {{
  var path = window.location.pathname;
  var m = path.match(/^(.*\\/EduTourism\\/)/i) || path.match(/^(.*\\/)(?:contact|projects|world)\\b/i) || path.match(/^(.*\\/)/);
  var base = m ? m[1] : '/';
  if (!base.endsWith('/')) base += '/';
  return base;
}})();
var globalData = {{
  "publicUrl": basePath + "wp-content/themes/unseen/public/",
  "assetsUrl": basePath + "wp-content/themes/unseen/resources/assets/"
}};
</script>"""
    html = re.sub(r'<script id="theme-js-extra">.*?</script>', theme_js_extra, html, flags=re.DOTALL)

    # In projects JSON array: update URLs
    html = html.replace("https:\\/\\/unseen.co\\/wp-content\\/", prefix.replace("/", "\\/") + "wp-content\\/")

    # Update site navigation links
    # Instead of https://unseen.co/contact/, use base-relative or depth-relative
    html = html.replace('href="https://unseen.co/"', f'href="{prefix}"')
    html = html.replace('href="https://unseen.co"', f'href="{prefix}"')
    html = html.replace('href="https://unseen.co/contact/"', f'href="{prefix}contact/"')
    html = html.replace('href="https://unseen.co/projects/"', f'href="{prefix}projects/"')
    html = html.replace('href="https://unseen.co/world/"', f'href="{prefix}world/"')
    html = html.replace('href="https://unseen.co/projects/page/2/"', f'href="{prefix}projects/page/2/"')
    html = html.replace('href="https://unseen.co/projects/page/3/"', f'href="{prefix}projects/page/3/"')

    return html

# 4. Generate Pages
pages = [
    ("unseen_index.html", "index.html", 0),
    ("unseen_contact.html", "contact/index.html", 1),
    ("unseen_projects.html", "projects/index.html", 1),
    ("unseen_world.html", "world/index.html", 1),
    ("unseen_projects_page_2.html", "projects/page/2/index.html", 3),
    ("unseen_projects_page_3.html", "projects/page/3/index.html", 3),
]

for src, dest, depth in pages:
    if os.path.exists(os.path.join(BASE_DIR, src)):
        processed = process_html(os.path.join(BASE_DIR, src), depth)
        dest_path = os.path.join(BASE_DIR, dest)
        os.makedirs(os.path.dirname(dest_path), exist_ok=True)
        with open(dest_path, "w", encoding="utf-8") as f:
            f.write(processed)
        print(f"Generated {dest} (depth: {depth})")

# 5. Create index.php for XAMPP / Apache default
with open(os.path.join(BASE_DIR, "index.php"), "w", encoding="utf-8") as f:
    f.write('<?php include_once("index.html"); ?>')
print("Generated index.php")

# 6. Create .htaccess for correct MIME types and fallback routing in Apache
htaccess_content = """# EduTourism - Unseen.co Clone Apache Configuration
AddDefaultCharset UTF-8

# Proper MIME types for modern WebGL & 3D assets
AddType application/wasm .wasm
AddType image/ktx2 .ktx2
AddType model/gltf-binary .glb
AddType font/woff2 .woff2
AddType font/woff .woff
AddType audio/mpeg .mp3
AddType audio/webm .webm
AddType image/svg+xml .svg

<IfModule mod_headers.c>
    Header set Access-Control-Allow-Origin "*"
</IfModule>

<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /EduTourism/

    # Do not rewrite existing files or directories
    RewriteCond %{REQUEST_FILENAME} -f [OR]
    RewriteCond %{REQUEST_FILENAME} -d
    RewriteRule ^ - [L]

    # Map /contact to contact/index.html, etc.
    RewriteRule ^contact/?$ contact/index.html [L]
    RewriteRule ^projects/?$ projects/index.html [L]
    RewriteRule ^world/?$ world/index.html [L]
    RewriteRule ^projects/page/2/?$ projects/page/2/index.html [L]
    RewriteRule ^projects/page/3/?$ projects/page/3/index.html [L]
</IfModule>
"""
with open(os.path.join(BASE_DIR, ".htaccess"), "w", encoding="utf-8") as f:
    f.write(htaccess_content)
print("Generated .htaccess")

print("Build completed successfully!")

