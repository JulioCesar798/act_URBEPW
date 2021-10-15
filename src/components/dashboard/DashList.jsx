import React from 'react';
import { Link, useRouteMatch } from 'react-router-dom';
import { Card, CardMedia, CardContent, Typography } from '@material-ui/core';
import GroupIcon from '@material-ui/icons/Group';
import MonetizationOnIcon from '@material-ui/icons/MonetizationOn';
import PostAddIcon from '@material-ui/icons/PostAdd';
import MenuBookIcon from '@material-ui/icons/MenuBook';


export default function DashList({ user }) {
  const { path } = useRouteMatch();

  return (
    <div className="grid-container alt">
      <Card style={{height: '100%'}}>
        <Link to={`${path}/adminconfig`} style={{textDecoration: 'none', color: 'inherit'}}>
          <CardMedia
            className="dash-icon"
            component="div"
          ><GroupIcon fontSize="inherit" /></CardMedia>
          <CardContent>
            <Typography component="h3" variant="h5" align="center">
              Configuración del Administrador
            </Typography>
          </CardContent>
        </Link>
      </Card>
       { 
        <Card style={{ height: '100%' }}>
          <Link to={`${path}/divisas`} style={{textDecoration: 'none', color: 'inherit'}}>
            <CardMedia
              className="dash-icon"
              component="div"
            ><MonetizationOnIcon fontSize="inherit" /></CardMedia>
            <CardContent>
              <Typography component="h3" variant="h5" align="center">
                Divisas
              </Typography>
            </CardContent>
          </Link>
        </Card>
        } 
      <Card style={{height: '100%'}}>
        <Link to={`${path}/banks`} style={{textDecoration: 'none', color: 'inherit'}}>
          <CardMedia
            className="dash-icon"
            component="div"
          ><PostAddIcon fontSize="inherit" /></CardMedia>
          <CardContent>
            <Typography component="h3" variant="h5" align="center">
              Bancos
            </Typography>
          </CardContent>
        </Link>
      </Card>
      {
         <Card style={{ height: '100%' }}>
          <Link to={`${path}/users`} style={{textDecoration: 'none', color: 'inherit'}}>
            <CardMedia
              className="dash-icon"
              component="div"
            ><GroupIcon fontSize="inherit" /></CardMedia>
            <CardContent>
              <Typography component="h3" variant="h5" align="center">
                Usuarios
              </Typography>
            </CardContent>
          </Link>
        </Card>
      }

      {
        <Card style={{ height: '100%' }}>
        <Link to={`${path}/estado`} style={{textDecoration: 'none', color: 'inherit'}}>
          <CardMedia
            className="dash-icon"
            component="div"
          ><GroupIcon fontSize="inherit" /></CardMedia>
          <CardContent>
            <Typography component="h3" variant="h5" align="center">
              Estado
            </Typography>
          </CardContent>
        </Link>
      </Card>







      }

    </div>
  )
}
