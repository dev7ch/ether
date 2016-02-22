LUYA BOOTSTRAP4 BOILERPLATE
=======================

# Installation

`composer create-project luyadev/luya-boilerplate-bootstrap4 -s dev`

# Front-End

### Libraries

[» jQuery (yii\web\JqueryAsset)](http://www.yiiframework.com/doc-2.0/yii-web-jqueryasset.html)  
[» Bootstrap v4-alpha2 (CSS & JS)](http://v4-alpha.getbootstrap.com/)

### Compiling

To compile all project assets, the compilers gulp and postcss are used.  
To minify the project assets, use `gulp ... --prod`.

> **HEADS UP!**  
> You can change some compiling settings in the `project-compile-config.json`.

#### Installation

To use gulp, you have to run `npm install` in the `resources/` folder. After the installation successfully completes, you can run `gulp`.

**Examples** (Directory: resources):

```
gulp (--prep, --prod)	        // Run default task
gulp styles (--prep, --prod)    // run "styles" task
gulp watch (--prep, --prod)     // Watch all files and run for example "styles" task if a scss file is changed
```

#### Enviroments

You can specify 3 different enviroments.

**dev**:  
The dev enviroment is the default enviroment. It'll be used to develop the website.

**prep**:  
The prep enviroment should be used to compile the styles for preproduction enviroments (preview sites).

**prod**:  
The prod enviroment should be used to compile the styles for production enviroments (live sites).

#### Plugin documentations

[» Autoprefixer](https://github.com/postcss/autoprefixer)  
[» postcss-style-guide](https://github.com/morishitter/postcss-style-guide)

#### GULP Tasks

| Task | Description |
| --- | --- |
| `styles` | This will compile all scss styles that are defined in `config.source.styles`. It will generate a sourcemap for all stylesheets. *Steps: sass, autoprefixer, pxtorem* |
| `test-styles` | This will test your styles. Currently it'll only check if you use css that is not supported by some browsers. *Steps: doiuse* |
| `styleguide` | This will create a styleguide based on css comments. [» Styleguide docs.](https://github.com/morishitter/postcss-style-guide) *Steps: style-guide* |
| `watch` | This will watch all files that have to be compiled after changes and recompile them on change. |
| `default (just run gulp)` | This will clean the dist directory and compile all styles new. After that, all files being watched will automatically be compiled. *Steps: clean, styles, watch* |

#### Config (project-compile-config.json)

| Setting | Description |
| --- | --- |
| `baseFontSize` | The base font size used to calculate rems out of pixels. *Default: 16* |
| `source` | A object with all source folders and files, that've to be compiled. *Currently only `styles` will be used.* |
| `dest` | A object with all ouput paths. *Currently only `stlyes` will be used. |