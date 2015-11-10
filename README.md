# vuejs-AdminLTE
Admin LTE Starter for Vue JS

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


