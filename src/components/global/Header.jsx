import React from 'react';
import { Link } from 'react-router-dom';
import { AppBar, Toolbar, Typography } from '@material-ui/core';




export default function Header() {

  return ( // leer la documentacion material-ui
    <AppBar style={{backgroundColor: "light-blue darken-2",zIndex: '800'}} position="relative">
      <Toolbar>
        <Typography variant="h6" style={{flex: 1}}>
          <Link to='/' style={{ 'textDecoration': 'none', 'color': 'inherit' }}>
            Finanzy
          </Link>
        </Typography>
        {/* 
        <div>
          <Link to="/blog" className="nav-link">About</Link>
        </div>
        */}
      </Toolbar>
    </AppBar>
  )
}
