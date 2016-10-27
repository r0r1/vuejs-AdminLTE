export default [
  {
    name: 'Dashboard',
    link: '/',
    icon: 'fa-home',
  },
  {
    name: 'Users',
    link: '/users',
    icon: 'fa-user',
    child: [
    {
      name: 'New',
      link: '/user/new',
      icon: 'fa-circle-o',
    },
    {
      name: 'Lists',
      link: '/user/list',
      icon: 'fa-circle-o'
    }
    ]
  },
  {
    name: 'Settings',
    link: '/settings',
    icon: 'fa-cogs',
  }
]