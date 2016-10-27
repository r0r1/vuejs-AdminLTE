import NotFound from './components/NotFound';
import Home from './components/Home';
import About from './components/About';
import Pricing from './components/Pricing';
import Login from './components/auth/Login';
import Register from './components/auth/Register';
import SelfPlan from './components/payment/SelfPlan';
import SelfAssisted from './components/payment/SelfAssisted';

// User
import User from './components/user/User';
import UserDashboard from './components/user/UserDashboard';
import UserSetting from './components/user/UserSetting';

export default {
  '*': {
    component: NotFound,
  },
  '/': {
    component: Home,
  },
  '/about': {
    component: About,
  },
  '/pricing': {
    component: Pricing,
  },
  '/login': {
    component: Login,
  },
  '/register': {
    component: Register,
  },
  '/payment/self-plan': {
    component: SelfPlan,
  },
  '/payment/assisted-filling-plan': {
    component: SelfAssisted,
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
