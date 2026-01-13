# Implementation Notes

## Current Setup
- **Theme:** Astra (free) with child theme
- **Page Builder:** Transitioning from Beaver Builder to custom HTML/CSS
- **CDN:** Cloudflare (for security and performance)
- **Caching:** WP Rocket
- **Email:** DMARC configured for deliverability
- **Forms:** Gravity Forms
- **Events:** The Events Calendar
- **Shop:** WooCommerce

## Performance Optimizations
The child theme includes:
- Removes Dashicons for non-logged-in users (~35KB saved)
- Disables WooCommerce scripts on non-shop pages
- Disables Beaver Builder assets on non-BB pages

## Header Configuration
- Sticky header on desktop/tablet (768px+)
- Normal positioning on mobile
- Smooth scroll enabled sitewide

## Development Notes
- Using WordPress Additional CSS area for safety when testing
- Child theme functions.php contains performance optimizations
- All custom components use consistent color palette
- Mobile-first responsive design approach
