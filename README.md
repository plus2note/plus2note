# Plus2Note WordPress Theme

**Plus2Note** is a custom WordPress theme developed for the project _Plus2Note_. It is a lightweight, fully responsive theme with a clean, minimal design and a focus on simplicity. This theme is designed for ease of customization and can be extended further to meet specific project requirements.

## Features

-   Responsive design
-   Clean, minimal UI
-   Customizable navigation menu
-   Widgetized sidebar
-   Supports featured images (post thumbnails)
-   Basic blog structure for posts, pages, categories, archives, and 404 pages

## Theme Folder Structure

```plaintext
plus2note/
│
├── style.css
├── index.php
├── functions.php
├── header.php
├── footer.php
├── sidebar.php
├── single.php
├── page.php
├── archive.php
├── category.php
├── 404.php
├── assets/
│   ├── css/
│   │   └── main.css
│   ├── js/
│   │   └── main.js
│   └── images/
├── template-parts/
│   ├── content.php
│   └── content-single.php
└── inc/
    └── customizer.php
```

### Key Files:

-   **style.css**: Contains theme metadata and basic styles.
-   **index.php**: The main template for the homepage and blog index.
-   **functions.php**: Contains theme setup and custom functionalities such as enqueuing scripts and styles, registering menus, and widget areas.
-   **header.php**: Template for the header section, including the navigation menu.
-   **footer.php**: Template for the footer section.
-   **sidebar.php**: Template for the sidebar with dynamic widgets.
-   **single.php**: Template for displaying individual blog posts.
-   **page.php**: Template for individual pages.
-   **archive.php**: Template for archive pages like categories or tags.
-   **category.php**: Template for displaying posts within a specific category.
-   **404.php**: Template for the 404 error page.

### Asset Files:

-   **assets/css/main.css**: Contains custom CSS styles for the theme.
-   **assets/js/main.js**: Contains custom JavaScript for the theme.

### Template Parts:

-   **template-parts/content.php**: Template for displaying post excerpts in loops.
-   **template-parts/content-single.php**: Template for displaying the content of a single post.

### Customizer:

-   **inc/customizer.php**: This file is used to manage theme customizer settings.

## Installation

1. Download or clone this repository to your WordPress `wp-content/themes` directory.
2. Activate the theme in your WordPress admin panel under **Appearance > Themes**.
3. Customize the theme settings and content as needed.

## Customization

-   Modify the CSS styles in `assets/css/main.css` to change the appearance of the theme.
-   Add your own JavaScript functionality in `assets/js/main.js`.
-   Edit the PHP files to change the structure of your pages, posts, and widgets.
-   Use the `functions.php` file to add more custom functionality, such as additional widgets or post formats.

## License

This theme is open-source and licensed under the [GNU General Public License v2 or later](https://www.gnu.org/licenses/gpl-2.0.html).

---

Created by **Pradip Chaudhary** for the project **Plus2Note**.
