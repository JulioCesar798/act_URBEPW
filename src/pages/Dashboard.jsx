import React, { useState, useEffect } from 'react'
import { Route, Switch, useRouteMatch } from 'react-router-dom';
import DashList from '../components/dashboard/DashList';
import DashUser from '../components/dashboard/DashUser'; 
import DashSales from '../components/dashboard/DashSales';
import DashBlog from '../components/dashboard/DashBlog';
import DashBook from '../components/dashboard/DashBook';
import DashEstado from '../components/dashboard/DashEstado';


import BackLink from '../components/global/BackLink';

import { getUser } from '../utils/session';


export default function Dashboard() {
  const { path } = useRouteMatch();
  const [user, setUser] = useState(null);
  useEffect(() => {
    const user = getUser();
    setUser(user);
  }, []);
  
  return (
    <Switch>
      <Route path={path} exact>
        <DashList user={user} />
      </Route>
      <Route path={path + '/adminconfig'} exact>
        <DashUser user={user} />
        <BackLink to={path} title="Volver al dashboard" />
      </Route>
      <Route path={path + '/divisas'} exact>
        <DashSales user={user} />
        <BackLink to={path} title="Volver al dashboard" />
      </Route>
      <Route path={path + '/banks'} exact>
        <DashBlog user={user} />
        <BackLink to={path} title="Volver al dashboard" />
      </Route>
      <Route path={path + '/users'} exact>
        <DashBook user={user} />
        <BackLink to={path} title="Volver al dashboard" />
      </Route>
      <Route path={path + '/estado'} exact>
        <DashEstado user={user} />
        <BackLink to={path} title="Volver al dashboard" />
      </Route>
    </Switch>
  )
}
