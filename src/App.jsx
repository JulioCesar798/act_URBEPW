import React from 'react';
import { Switch, useLocation, Redirect } from 'react-router-dom';
import { Container, CssBaseline } from '@material-ui/core';


import PublicRoute from './components/global/PublicRoute';
import PrivateRoute from './components/global/PrivateRoute';
import Header from './components/global/Header';
import Footer from './components/global/Footer';

import Login from './pages/Login';
import Dashboard from './pages/Dashboard';
import Error from './pages/Error';
import { API_URI } from './utils/request';


function App() {
  const location = useLocation();

  console.log(API_URI); //Verificar si esta correctamente el backend
  
  return (
    <React.Fragment>
      <CssBaseline />
      <Header />
      <div className={`app ${location.pathname === '/admin-login' ? 'login-page': ''}`}>
        <Container maxWidth="lg" style={{ padding: '20px 0' }}>
          <Switch>
            <Redirect to="/dashboard" path="/" exact />
            <PrivateRoute component={Dashboard} path='/dashboard' />
            <PublicRoute restricted={true} component={Login} exact path='/admin-login' />
            <PublicRoute restricted={false} component={Error} />
          </Switch>
        </Container>
      </div>
      <Footer />
    </React.Fragment>
  );
}

export default App;
