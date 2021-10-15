import React, { useCallback, useEffect, useState } from 'react';

import Table from '@material-ui/core/Table';
import TableHead from '@material-ui/core/TableHead';
import TableBody from '@material-ui/core/TableBody';
import TableRow from '@material-ui/core/TableRow';
import TableCell from '@material-ui/core/TableCell';
import { Card, CardContent, Typography } from '@material-ui/core';


import { getSalesList } from '../../../utils/request';

export default function SalesTable({ user }) {
  const [sales, setSales] = useState([]);

  const getSales = useCallback(async () => {
    try {
      const { data } = await getSalesList(user.token);
      // console.log(data);
      if (data) {
        setSales(data);
      }
    } catch (error) {
      console.log(error);
    }
  }, [user]);

  useEffect(() => {
    getSales();
  }, [getSales]);


  return (
    <Card>
      <CardContent>
        <Typography variant="h5">Carteras</Typography>
        <Table size="small">
          <TableHead>
            <TableRow>
              <TableCell>ID</TableCell>
              <TableCell>1</TableCell>
              <TableCell>2</TableCell>
              <TableCell>3</TableCell>
              <TableCell>4</TableCell>
              <TableCell>5</TableCell>
              <TableCell>6</TableCell>
            </TableRow>
          </TableHead>
          {
            sales.length > 0 && (
              <TableBody>
                {
                  sales.map((sale, index) => (
                    <TableRow key={sale._id}>
                      <TableCell>{++index}</TableCell>
                      <TableCell>{sale.books}</TableCell>
                      <TableCell>{sale.users.email}</TableCell>
                      <TableCell>{sale.users.name} {sale.users.lastname}</TableCell>
                      <TableCell>{sale._id}</TableCell>
                      <TableCell>{sale.created_at}</TableCell>
                      <TableCell>{sale.price}</TableCell>
                    </TableRow>
                  ))
                }
              </TableBody>
            )
          }
        </Table>
        {
          sales.length === 0 && <Typography align="center" style={{marginTop: '20px'}}>No se han podido cargar la informacion desde la base de datos</Typography>
        }
      </CardContent>
    </Card>
  )
}
