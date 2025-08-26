# Dingocoin Official Website

[![Website](https://img.shields.io/website?url=https%3A%2F%2Fdingocoin.com)](https://dingocoin.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.1%2B-blue.svg)](https://php.net)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3.0-purple.svg)](https://getbootstrap.com)

> **The official website for Dingocoin - the most successful cryptocurrency fork of Dogecoin, inspired by the Australian dingo and driven by revolutionary innovations.**


## Features

### Core Functionality
- ** Homepage**: Dynamic landing page with real-time market data
- ** Market Data**: Live cryptocurrency statistics and price tracking
- ** Wallet Downloads**: Multi-platform wallet download system with automatic OS detection
- ** Blog System**: Dynamic blog post management with pagination and SEO optimization
- ** AMA Player**: Interactive audio player for community Ask Me Anything sessions
- ** Mining Calculator**: Profitability calculation tool for miners
- ** Maintenance Mode**: Separate maintenance interface for updates

### Technical Features
- ** Responsive Design**: Bootstrap-based mobile-first responsive layout
- ** Performance Optimized**: WebP image support, lazy loading, and optimized assets
- ** SEO Friendly**: Comprehensive meta tags, Open Graph, and Twitter Card support
- ** Modern UI**: Clean, professional design with Font Awesome 6.4.0 icons
- ** Security**: Input validation, CSRF protection, and secure headers
- ** Multi-language Ready**: Structured for easy internationalization

### Content Management
- ** Dynamic Blog Posts**: JSON-based blog post system with rich metadata
- ** Image Gallery**: Organized image assets with WebP optimization
- ** Document Management**: PDF downloads and technical documentation
- ** Media Handling**: Audio file management for AMA sessions

## Technology Stack

### Backend
- **PHP 8.1+** - Server-side processing and dynamic content generation
- **HTML5** - Modern semantic markup
- **Apache/Nginx** - Web server (with .htaccess configuration)

### Frontend
- **JavaScript (ES6+)** - Modern client-side interactions
- **Bootstrap 5.3.0** - Responsive CSS framework
- **Font Awesome 6.4.0** - Icon library
- **CSS3** - Custom styling with CSS variables
- **WebP** - Modern image format for optimal performance

### Dependencies
- **jQuery** - DOM manipulation and AJAX requests
- **Bootstrap JS** - Interactive components
- **Custom Scripts** - Blog management and dynamic content loading

## 📁 Project Structure

```
dingocoin-website-dev/
├── 📄 index.php                    # Main application entry point
├── 📄 Mining-Profits.html          # Mining profitability calculator
├── 📄 README.md                    # Project documentation
├── 📄 TECHNICAL_DOCUMENTATION.md   # Comprehensive technical docs
├── 
├── 📁 css/                         # Stylesheets
│   ├── style.css                   # Main custom styles
│   ├── style-blog-post.css         # Blog-specific styles
│   ├── bootstrap.min.css           # Bootstrap framework
│   └── font_awesome_6_4.css        # Font Awesome icons
├── 
├── 📁 js/                          # JavaScript files
│   ├── script-main-1.js            # Main application logic
│   └── blog-posts.js               # Blog post management
├── 
├── 📁 img/                         # Image assets
│   ├── logos/                      # Brand logos and favicons
│   ├── blog/                       # Blog post thumbnails
│   ├── exchanges/                  # Exchange platform logos
│   ├── sitemain/                   # Main site images
│   └── trailmap/                   # Roadmap and timeline images
├── 
├── 📁 includes/                    # Reusable components
│   ├── pages/
│   │   ├── top_nav.html           # Navigation header
│   │   └── footer.html            # Site footer
│   └── media/
│       └── ama/                   # AMA audio files
├── 
├── 📁 docs/                        # Documentation
│   ├── dingocoin_technical_information.pdf
│   └── Dingocoin-The-Blockchain-Trilemma.pdf
├── 
├── 📁 downloads/                   # Downloadable resources
│   └── whitepaper/
│       └── DingocoinWhitePaper.pdf
├── 
└── 📁 maint-mode/                  # Maintenance mode files
    ├── index.php                   # Maintenance page
    ├── css/                        # Maintenance styles
    ├── img/                        # Maintenance images
    └── includes/                   # Maintenance components
```

## ⚙️ Installation & Setup

### Prerequisites
- **PHP 8.1 or higher**
- **Web server** (Apache/Nginx)
- **mod_rewrite enabled** (for Apache)

### Quick Start

1. **Clone the repository**
   ```bash
   git clone https://github.com/dingocoin/dingocoin-website.git
   cd dingocoin-website-dev
   ```

2. **Set up web server**
   
   **For Apache:**
   ```bash
   # Ensure mod_rewrite is enabled
   sudo a2enmod rewrite
   
   # Configure virtual host to point to project directory
   # Make sure .htaccess file is present and readable
   ```
   
   **For Nginx:**
   ```nginx
   server {
       listen 80;
       server_name your-domain.com;
       root /path/to/dingocoin-website-dev;
       index index.php;
       
       location / {
           try_files $uri $uri/ /index.php?$query_string;
       }
       
       location ~ \.php$ {
           fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
           fastcgi_index index.php;
           fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
           include fastcgi_params;
       }
   }
   ```

3. **Configure permissions**
   ```bash
   # Set appropriate permissions
   chmod 755 .
   chmod 644 *.php *.html
   chmod -R 755 css/ js/ img/ includes/
   ```

4. **Verify installation**
   - Open your browser and navigate to your configured domain
   - Check that all images load correctly
   - Test responsive design on different screen sizes
   - Verify blog posts load properly

### Environment Configuration

1. **PHP Configuration**
   - Ensure `allow_url_fopen` is enabled for external API calls
   - Set appropriate `memory_limit` (recommended: 128M+)
   - Configure `max_execution_time` for data processing

2. **Web Server Configuration**
   - Enable GZIP compression for better performance
   - Set proper cache headers for static assets
   - Configure SSL/TLS certificates for HTTPS

##  Usage

### Main Features

1. **Homepage Navigation**
   - Dynamic market data display
   - Featured content sections
   - Responsive navigation menu

2. **Wallet Downloads**
   - Automatic OS detection
   - Multi-platform support
   - Direct download links

3. **Blog System**
   - Paginated blog posts
   - SEO-optimized content
   - Social media integration

4. **Mining Calculator**
   - Real-time profitability calculations
   - Hardware compatibility checks
   - Power consumption estimates

### Customization

1. **Blog Posts** (`js/blog-posts.js`)
   ```javascript
   const blogPosts = [
       {
           title: "Your Blog Post Title",
           url: "https://blog.dingocoin.com/your-post/",
           thumbnail: "./img/blog/your-image.webp",
           excerpt: "Your post excerpt...",
           seo: { 
               keywords: ["keyword1", "keyword2"], 
               description: "SEO description" 
           }
       }
   ];
   ```

2. **Styling** (`css/style.css`)
   - Customize CSS variables for consistent theming
   - Modify Bootstrap overrides
   - Add custom animations and effects

3. **Content Updates**
   - Update meta tags in `index.php`
   - Modify navigation in `includes/pages/top_nav.html`
   - Update footer content in `includes/pages/footer.html`

##  Deployment

### Production Deployment

1. **Server Requirements**
   - PHP 8.1+ with required extensions
   - Web server (Apache/Nginx)
   - SSL certificate for HTTPS
   - CDN for static assets (optional)

2. **Optimization Steps**
   ```bash
   # Minify CSS and JavaScript (optional)
   # Optimize images for web
   # Enable server-side compression
   # Configure caching headers
   ```

3. **Security Checklist**
   - [ ] Remove development files
   - [ ] Set secure file permissions
   - [ ] Configure security headers
   - [ ] Enable HTTPS redirect
   - [ ] Validate all user inputs

### Maintenance Mode

To enable maintenance mode:
1. Redirect traffic to `maint-mode/index.php`
2. Update maintenance message as needed
3. Monitor server status during updates

## 🔧 Development

### Local Development Setup

1. **Development Server**
   ```bash
   # Using PHP built-in server
   php -S localhost:8000
   
   # Or use XAMPP/WAMP/MAMP for full stack
   ```

2. **File Watching** (Optional)
   ```bash
   # Set up file watchers for CSS/JS changes
   # Use tools like Gulp, Webpack, or Vite for advanced workflows
   ```

### Code Standards

- **PHP**: Follow PSR-12 coding standards
- **JavaScript**: Use ES6+ features, maintain consistent formatting
- **CSS**: Use BEM methodology for class naming
- **HTML**: Semantic markup with accessibility considerations

### Testing

- Test responsive design across devices
- Validate HTML/CSS/JS syntax
- Check performance with tools like Lighthouse
- Verify cross-browser compatibility

##  Responsive Design

The website is fully responsive with breakpoints:
- **Mobile**: < 768px
- **Tablet**: 768px - 1024px  
- **Desktop**: > 1024px

### Key Responsive Features
- Flexible grid system using Bootstrap
- Scalable images with WebP support
- Touch-friendly navigation
- Optimized typography scaling

##  Customization

### Theme Customization

1. **Colors** - Update CSS variables in `css/style.css`
2. **Typography** - Modify font families and sizes
3. **Layout** - Adjust Bootstrap grid and spacing
4. **Components** - Customize cards, buttons, and forms

### Content Management

1. **Images** - Add new images to appropriate `img/` subdirectories
2. **Blog Posts** - Update `js/blog-posts.js` with new content
3. **Documentation** - Add PDFs to `docs/` or `downloads/` directories

##  Contributing

We welcome contributions to improve the Dingocoin website! Here's how you can help:

### Getting Started

1. **Fork the repository**
2. **Create a feature branch**
   ```bash
   git checkout -b feature/your-feature-name
   ```
3. **Make your changes**
4. **Test thoroughly**
5. **Submit a pull request**

### Contribution Guidelines

- **Code Quality**: Follow existing code standards and patterns
- **Testing**: Test all changes across different devices and browsers
- **Documentation**: Update documentation for significant changes
- **Performance**: Ensure changes don't negatively impact site performance

### Areas for Contribution

-  Bug fixes and improvements
-  UI/UX enhancements
-  Mobile experience optimization
-  Accessibility improvements
-  Internationalization support
-  Performance optimizations


### Community Resources

- ** Official Website**: [dingocoin.com](https://dingocoin.com)
- ** Discord**: [Join our Discord](https://discord.gg/dingocoin)


### Technical Support

- **🐛 Issues**: [GitHub Issues](https://github.com/dingocoin/dingocoin-website-dev/issues)
- **💡 Feature Requests**: [GitHub Discussions](https://github.com/dingocoin/dingocoin-website-dev/discussions)
- **📧 Contact**: [Join our Discord](https://discord.gg/dingocoin)

### Development Resources

- ** Technical Documentation**: [TECHNICAL_DOCUMENTATION.md](TECHNICAL_DOCUMENTATION.md)
- **🔧 API Documentation**: Available in the `docs/` directory
- **📋 Changelog**: Check commit history for recent changes

---


