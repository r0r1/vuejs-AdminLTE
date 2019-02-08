# vuejs-AdminLTE
[Admin LTE] (https://almsaeedstudio.com/preview) Starter for [Vue JS] (http://vuejs.org/)

## Installation

``` bash
# install dependencies
npm install

# serve with hot reload at localhost:8080
npm run dev

# build for production with minification
npm run build

# run unit tests
npm run unit

# run e2e tests
npm run e2e

# run all tests
npm test
```

For detailed explanation on how things work, checkout the [guide](http://vuejs-templates.github.io/webpack/) and [docs for vue-loader](http://vuejs.github.io/vue-loader).

## Usage

### Create Page
- Create file in components folder

  ``` html
  # user.vue
  <template>
    <h3>User Lists</h3>
  </template>

  <style>
    // style here
  </style>

  <script>
    // script here
  </script>
  ```
- Register route component in **src/app.js**

  ``` html
  router.map({
    '/user': {
      component: require('./components/user.vue')
    }
  });

  ```

### Add Menu
Open config/menus.js, and modify json data.

``` html
{
  name: 'Dashboard',
  link: '/',
  icon: 'fa-home',
  child: [{
    name: 'Child Dashboard',
    link: '/child',
    icon: 'fa-circle-o',
    }
  ] 
  // child is optional
}
```

## Buy me a coffee
<a href="https://www.buymeacoffee.com/vGpRdYE" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: auto !important;width: auto !important;" ></a>