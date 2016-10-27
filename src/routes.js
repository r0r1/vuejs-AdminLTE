import User from './components/User';
import Dashboard from './components/UserDashboard';
import Setting from './components/UserSetting';

export default {
  '/login': {
    component: Login,
  },
  '/register': {
    component: Register,
  },
  '/user': {
    component: User,
    subRoutes: {
      '/dashboard': {
        component: UserDashboard,
      },
      '/setting': {
        component: UserSetting,
      },
    },
    auth: true,
  },
};
