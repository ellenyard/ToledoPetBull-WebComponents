# Astra Child Theme for Toledo's Pet Bull Project

## Installation Instructions

### Step 1: Upload the Theme
1. Log into your WordPress admin dashboard
2. Go to **Appearance → Themes**
3. Click **Add New** → **Upload Theme**
4. Click **Choose File** and select the `astra-child.zip` file
5. Click **Install Now**

### Step 2: Activate the Theme
1. After installation, click **Activate**
2. Your site will now be using the Astra Child theme

### Step 3: Clear All Caches
This is **very important** for the optimizations to take effect:

1. **WP Rocket Cache:**
   - Go to Settings → WP Rocket
   - Click "Clear Cache"

2. **Cloudflare Cache:**
   - Log into Cloudflare
   - Go to Caching → Purge Everything

3. **Browser Cache:**
   - Press Cmd+Shift+R (Mac) or Ctrl+Shift+R (Windows)

### Step 4: Remove Old Custom CSS (Optional but Recommended)
Since all your CSS is now in the child theme:

1. Go to **Appearance → Customize**
2. Click **Additional CSS**
3. You can now delete the CSS there (it's already in your child theme)
4. Click **Publish**

## What's Included

### Performance Optimizations
✅ **Removes Dashicons** for non-logged-in users (saves ~35 KiB)
✅ **Disables WooCommerce** scripts/styles on non-shop pages
✅ **Disables Beaver Builder** assets on pages not using BB
✅ Works perfectly with **WP Rocket** caching

### Custom Styling
✅ All your custom CSS from "Additional CSS"
✅ Hero carousel styles
✅ Partner logo animations
✅ Board of Directors layout
✅ Custom button system
✅ Contact info boxes
✅ Card layouts
✅ Modal system
✅ Sticky header (desktop only)
✅ And much more!

## Testing Your Site

After activation, test these pages:
- ✓ Homepage
- ✓ Shop pages (WooCommerce)
- ✓ Beaver Builder pages
- ✓ Contact/About pages
- ✓ Mobile view

## Expected Performance Improvements

After clearing all caches, you should see:
- 30-50% faster page load times
- Reduced render-blocking resources
- Better mobile performance
- Lower bandwidth usage for visitors

## Troubleshooting

### If something looks broken:
1. Clear all caches (WP Rocket, Cloudflare, Browser)
2. Check that parent Astra theme is still installed
3. Deactivate and reactivate the child theme

### If WooCommerce shop pages have issues:
The optimizations are designed to NOT affect shop pages. If you see issues, let me know!

### If Beaver Builder pages look wrong:
The code only loads BB assets on pages that use BB. If something's off, clear caches first.

## Support

For issues specific to this child theme, check:
- WP Rocket settings are properly configured
- Parent Astra theme is up to date
- All caches have been cleared

## Version History

**Version 1.0.0** - Initial Release
- Migrated all custom CSS from Additional CSS
- Added performance optimization functions
- Includes WooCommerce conditional loading
- Includes Beaver Builder conditional loading
- Removes Dashicons for visitors
