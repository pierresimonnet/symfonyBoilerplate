# Symfony Boilerplate
Start a Symfony project easily

## Inside the boilerplate

### Symfony

`symfony new my_project_name --full`

### API Plateform

`composer req api`

### Webpack

`composer require symfony/webpack-encore-bundle`

`yarn install`

In webpack.config.js :

`.enableSassLoader() .enableReactPreset()`

(And chance "css" to "scss")

`yarn add @babel/preset-react --dev`
`yarn add react react-dom prop-types`

### Liip Imagine

`composer require liip/imagine-bundle`

Add / remove filters : config/packages/liip_imagine.yaml

### Test

`composer require --dev symfony/phpunit-bridge`

### PHPStan

`composer require --dev phpstan/phpstan-symfony`

(And add phpstan.neon)

### CSS Reset file
https://github.com/jgthms/minireset.css

## Help : 
`make help`
