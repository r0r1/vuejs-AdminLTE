# vuejs-AdminLTE
[Admin LTE] (https://almsaeedstudio.com/preview) Starter for [Vue JS] (http://vuejs.org/)

## Installation

``` bash
# install npm
npm install

# install bower
bower install

# run
npm run dev
```

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