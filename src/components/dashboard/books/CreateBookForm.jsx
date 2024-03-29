import React from "react";
import { useForm } from "react-hook-form";
import { yupResolver } from "@hookform/resolvers/yup";
import * as yup from "yup";

import Dialog from "@material-ui/core/Dialog";
import DialogActions from "@material-ui/core/DialogActions";
import DialogContent from "@material-ui/core/DialogContent";
import DialogContentText from "@material-ui/core/DialogContentText";
import DialogTitle from "@material-ui/core/DialogTitle";
import { TextField, Button, Input, FormHelperText, FormControl, InputLabel } from "@material-ui/core";
import { amber } from "@material-ui/core/colors";


const SUPPORTED_FORMATS = ['image/jpeg', 'image/png'];
const schema = yup.object().shape({
  title: yup.string().required("El titulo es requerido"),
  description: yup.string().required("La descripción es requerida"),
  author: yup.string().required("El autor es requerido"),
  publisher: yup.string().required("La editorial es requerida"),
  price: yup.number()
    .transform(value => (isNaN(value) ? undefined : value))
    .typeError('Debe ser un numero')
    .positive('Debe ser un numero positivo')
    .required("El precio es requerido"),
  url: yup.string().url('La url no tiene un formato válido')
    .required("La url del libro es requerida"),
  image: yup.mixed()
    .nullable()
    .required("La imagen es requerida")
    .test("FILE_FORMAT", "El archivo no es de un formato permitido (.PNG/.JPEG)", 
      value => !value || (value && SUPPORTED_FORMATS.includes(value[0]?.type))
    )
});
// titulo, descripción, autor, editorial, imagen y precio.

export default function CreateBookForm({ open, handleOpen, onCreate }) {

  const { register, handleSubmit, errors } = useForm({
    mode: "onSubmit",
    resolver: yupResolver(schema),
  });

  return (
    <Dialog open={open} onClose={handleOpen}>
      <DialogTitle>Añadir un nuevo usuario</DialogTitle>
      <DialogContent>
        <DialogContentText>
          Completa los campos de textos, que se mencionan a continuacion, para completar el registro.
        </DialogContentText>
        <form className="form" onSubmit={handleSubmit(onCreate)}>
          <div className="form-group">
            <TextField
              type="text"
              margin="dense"
              id="title"
              label="Nombres"
              name="title"
              inputRef={register}
              error={errors?.title ? true : false}
              helperText={errors?.title?.message}
              fullWidth
            />
          </div>
            
          <div className="form-group">
            <TextField
              multiline
              type="text"
              margin="dense"
              id="description"
              label="Apellidos"
              name="description"
              inputRef={register}
              error={errors?.description ? true : false}
              helperText={errors?.description?.message}
              fullWidth
            />
          </div>  

          <div className="form-group">
            <TextField
              type="text"
              margin="dense"
              id="author"
              label="Email"
              name="author"
              inputRef={register}
              error={errors?.author ? true : false}
              helperText={errors?.author?.message}
              fullWidth
            />
          </div> 

          {/*
          <div className="form-group">
            <TextField
              type="text"
              margin="dense"
              id="publisher"
              label="Editorial"
              name="publisher"
              inputRef={register}
              error={errors?.publisher ? true : false}
              helperText={errors?.publisher?.message}
              fullWidth
            />
          </div>
          */}

        {/*
          <div className="form-group">
            <TextField
              type="number"
              margin="dense"
              id="price"
              label="Precio"
              name="price"
              inputRef={register}
              error={errors?.price ? true : false}
              helperText={errors?.price?.message}
              fullWidth
            />
          </div>
          */}

           {/*
          <div className="form-group">
            <TextField
              type="text"
              margin="dense"
              id="url"
              label="URL del libro en PDF"
              name="url"
              inputRef={register}
              error={errors?.url ? true : false}
              helperText={errors?.url?.message}
              fullWidth
            />
          </div>
          */}
          {/*
          <div className="form-group">
            <FormControl error={errors?.image ? true : false} style={{padding: '25px 0'}}>
              <InputLabel htmlFor="image">Imagen</InputLabel>
              <Input
                type="file"
                margin="dense"
                id="image"
                label="Imagen"
                name="image"
                inputRef={register}
                accept="image/png, image/jpeg"
              />
              <FormHelperText>{errors?.image?.message}</FormHelperText>
            </FormControl>
          </div>
          */}
          <DialogActions>
            <Button type="button" onClick={handleOpen} color="secondary">
              Cancelar
            </Button>
            <Button type="submit" variant="contained" style={{background: amber[700]}}>
              Añadir
            </Button>
          </DialogActions>
        </form>
      </DialogContent>
      
    </Dialog>
  );
}
