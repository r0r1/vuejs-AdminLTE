import Login from './pages/Login';
import Dashboard from './pages/Dashboard';
import Setting from './pages/Setting';
// User
import User from './pages/users/User';
import UserList from './pages/users/UserList';
import UserNew from './pages/users/UserNew';


export default {
  '/login': {
    component: Login,
  },
  '/': {
    component: Dashboard,
  },
  '/user': {
    component: User,
    subRoutes: {
      '/list': {
        component: UserList,
      },
      '/new': {
        component: UserNew,
      },
    },
  },
  '/settings': {
    component: Setting,
  },
};
