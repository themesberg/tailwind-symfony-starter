Follow the [steps from this guide](https://flowbite.com/docs/getting-started/symfony/) to learn how to create a new Symfony project on your local computer, install and configure the Tailwind CSS framework, and finally install Flowbite and leverage the open-source UI components to build websites even faster.

## Requirements

Make sure that before you get started you have both [PHP](https://www.php.net/) (v8.1 or higher), [Composer](https://getcomposer.org/download/) and [Node.js](https://nodejs.org/en/) installed on your local environment so that Symfony, Tailwind CSS and Flowbite can be properly set up and configured.

## Create a Symfony project

The most straightforward approach for creating a new Symfony project is to use the official [Symfony CLI](https://symfony.com/download) installer which you can easily install on macOS and Linux devices using Homebrew:

```bash
brew install symfony-cli/tap/symfony-cli
```

For devices running on Windows you can also install the Symfony CLI using Scoop:

```bash
scoop install symfony-cli
```

Now that you have the CLI available you can proceed by creating a new project.

1. Create a new Symfony project by running the following command inside your terminal:

```bash
symfony new --webapp flowbite-app
```

This command will create a new folder with a fresh Symfony project installation inside.

2. Change the current working directory to the newly created project folder:

```bash
cd flowbite-app
```

3. Install the recommended Symfony Webpack Encore bundle to enable front-end integration via Composer and remove the default dependencies:

```bash
composer remove symfony/ux-turbo symfony/asset-mapper symfony/stimulus-bundle
composer require symfony/webpack-encore-bundle
```

4. Run the following command in your terminal to start a local web server:

```bash
symfony server:start
```

This command will make the web application accessible via the browser on `http://localhost:8000`.

To deploy your application on a server we recommend you to check out the official [production deployment tools and bundlers](https://symfony.com/doc/current/deployment.html) that Symfony provides out-of-the-box, such as Deployer, Ansistrano, or Fabric.

Now that you have a working Symfony application on your local computer we can proceed with installing and setting up Tailwind CSS.

## Install Tailwind CSS

[Tailwind CSS](https://tailwindcss.com/) is a popular and open-source utility-first CSS framework that allows you to code styles directly inside your HTML based on preconfigured classes that will speed up your UI front-end development.

1. Run the following command to require and install Tailwind CSS and PostCSS via NPM:

```bash
npm install tailwindcss @tailwindcss/postcss postcss postcss-loader --save-dev
```

2. Import the base Tailwind directive inside the default `./assets/styles/app.css` file:

```css
@import "tailwindcss";
```

3. Enable the PostCSS loader plugin by adding it to the Webpack config file:

```javascript
// webpack.config.js
Encore
    // other plugins

    .enablePostCssLoader()

    // ... more plugins
```

4. Create a new `postcss.config.mjs` file in the root folder and add the following configuration:

```javascript
export default {
  plugins: {
    "@tailwindcss/postcss": {},
  },
};
```

5. Run the following command to compile the front-end assets via Webpack:

```bash
npm run watch
```

## Install Flowbite

[Flowbite](https://flowbite.com) is a free and popular open-source UI component library built on top of the utility-classes from Tailwind CSS featuring interactive UI elements such as dropdowns, navbars, modals and also an ecosystem of website sections, templates, plugins, tools, and more that you can leverage to build websites even faster.

1. Install Flowbite as a dependency using NPM by running the following command:

```bash
npm install flowbite --save
```

2. Import the default theme variables from Flowbite inside your main `app.css` CSS file:

```css
@import "flowbite/src/themes/default";
```

3. Import the Flowbite plugin file in your CSS:

```css
@plugin "flowbite/plugin";
```

4. Configure the source files of Flowbite in your CSS:

```css
@source "../../node_modules/flowbite";
```

Inside the `./assets/app.js` file you can import the Flowbite package to enable interactivity of the UI components:

```javascript
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

// enable the interactive UI components from Flowbite
import 'flowbite';
```

## Flowbite components

Now that you have all of the technologies successfully set up in your Symfony project you can finally start building websites quickly and efficiently leveraging both the utility classes from Tailwind CSS, the [pre-built UI components from Flowbite](https://flowbite.com/docs/getting-started/symfony/) and the framework structure from Symfony.
