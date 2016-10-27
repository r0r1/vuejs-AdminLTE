import { router } from './../main';

const apiUrl = 'http://localhost:8000/';
const loginUrl = `${apiUrl}api/v3/authenticate`;
const signupUrl = `${apiUrl}api/v3/register`;

export default {
  user: {
    authenticated: false,
  },

  login(context, creds) {
    context.$http.post(loginUrl, creds)
      .then((data) => {
        localStorage.setItem('id_token', data.id_token);

        this.user.authenticated = true;
        router.go('/user');
      }, (err) => {
        const ctx = context;
        if (err.data.hasOwnProperty('messages')) {
          const messages = err.data.messages;
          Object.keys(messages).forEach((key) => {
            ctx.errors.push(messages[key]);
          });
        } else {
          ctx.errors.push(err.data.message);
        }
      });
  },

  signup(context, creds, redirect) {
    context.$http.post(signupUrl, creds, (data) => {
      localStorage.setItem('id_token', data.id_token);

      this.user.authenticated = true;

      if (redirect) {
        router.go(redirect);
      }
    }).error((err) => {
      const ctx = context;
      ctx.error = err;
    });
  },

  // To log out, we just need to remove the token
  logout() {
    localStorage.removeItem('id_token');
    this.user.authenticated = false;
  },

  checkAuth() {
    const jwt = localStorage.getItem('id_token');
    if (jwt) {
      this.user.authenticated = true;
    } else {
      this.user.authenticated = false;
    }
  },

  getAuthHeader() {
    const header = `Authorization: Bearer ${localStorage.getItem('id_token')}`;
    return {
      header,
    };
  },
};
