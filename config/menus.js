module.exports = [
  {
    name: 'Dashboard',
    link: '/',
    icon: 'fa-home',
  },
  {
    name: 'Users',
    link: '/user',
    icon: 'fa-user',
    child: [
    {
      name: 'New',
      link: '/user/new',
      icon: 'fa-circle-o',
    },
    {
      name: 'Lists',
      link: '/user/lists',
      icon: 'fa-circle-o'
    }
    ]
  },
  {
    name: 'Configurations',
    link: '/configurations',
    icon: 'fa-cogs',
  }
]