import axios from 'axios';

export const API_URI = 'http://localhost:4500'; 

/* SESSION */



export const login = async (data) => {
  try {
    return await axios.post(`${API_URI}/api/auth/signin/admin`, data).catch(err => {
      throw err
    })
  } catch (err) {
    if (err.response) {
      return {
        status: err.response.status,
        data: err.response.data
      }
    } else {
      throw err;
    }
  }
}

/* USERS */

export const createUser = async (token, data) => {
  try {
    return await axios.post(`${API_URI}/api/signup/admin`, data, {
      headers: {
        'x-access-token' : token
      }
    }).catch(err => {
      throw err;
    })
  } catch (err) {
    if (err.response) {
      return {
        status: err.response.status,
        data: err.response.data
      }
    } else {
      throw err;
    }
  }
}

export const changePassword = async (token, data) => {
  try {
    return await axios.put(`${API_URI}/api/users/updatePass`, data, {
      headers: {
        'x-access-token' : token
      }
    }).catch(err => {
      throw err;
    })
  } catch (err) {
    if (err.response) {
      return {
        status: err.response.status,
        data: err.response.data
      }
    } else {
      throw err;
    }
  }
}

// WORKING....


export const getList = async (token) => {
  try {
    return await axios.get(`${API_URI}/api/allUsers`, {
      headers: {
        'x-access-token' : token
      }
    }).catch(err => {
      throw err;
    })
  } catch (err) {
    throw err;
  }
}







export const removeUser = async (token, id) => {
  try {
    return await axios.delete(`${API_URI}/api/admin/${id}`, {
      headers: {
        'x-access-token' : token
      }
    }).catch(err => {
      throw err;
    })
  } catch (err) {
    throw err;
  }
}

/* POSTS */

export const getPostsList = async () => {
  try {
    return await axios.get(`${API_URI}/api/posts`).catch(err => {
      throw err;
    })
  } catch (err) {
    throw err;
  }
}

export const getPost = async (id) => {
  try {
    return await axios.get(`${API_URI}/api/posts/${id}`).catch(err => {
      throw err;
    })
  } catch (err) {
    throw err;
  }
}

export const addPost = async (token, data) => {

  try {
    return await axios.post(`${API_URI}/api/post/admin/`, data, {
      headers: {
        'x-access-token' : token
      }
    }).catch(err => {
      throw err;
    })
  } catch (err) {
    if (err.response) {
      return {
        status: err.response.status,
        data: err.response.data
      }
    } else {
      throw err;
    }
  }
}

export const updatePost = async (token, data, id) => {

  try {
    return await axios.put(`${API_URI}/api/posts/${id}`, data, {
      headers: {
        'x-access-token' : token
      }
    }).catch(err => {
      throw err;
    })
  } catch (err) {
    if (err.response) {
      return {
        status: err.response.status,
        data: err.response.data
      }
    } else {
      throw err;
    }
  }
}

export const removePost = async (token, id) => {
  try {
    return await axios.delete(`${API_URI}/api/posts/${id}`, {
      headers: {
        'x-access-token' : token
      }
    }).catch(err => {
      throw err;
    })
  } catch (err) {
    throw err;
  }
}

/* BOOKS */


export const getBookList = async () => {
  try {
    return await axios.get(`${API_URI}/api/allUsers`).catch(err => {
      throw err;
    })
  } catch (err) {
    throw err;
  }
}

export const addBook = async (token, data) => {

  try {
    return await axios.post(`${API_URI}/api/book/admin/`, data, {
      headers: {
        'x-access-token' : token
      }
    }).catch(err => {
      throw err;
    })
  } catch (err) {
    if (err.response) {
      return {
        status: err.response.status,
        data: err.response.data
      }
    } else {
      throw err;
    }
  }
}

export const updateBook = async (token, data, id) => {

  try {
    return await axios.put(`${API_URI}/api/admin/books/${id}`, data, {
      headers: {
        'x-access-token' : token
      }
    }).catch(err => {
      throw err;
    })
  } catch (err) {
    if (err.response) {
      return {
        status: err.response.status,
        data: err.response.data
      }
    } else {
      throw err;
    }
  }
}

export const removeBook = async (token, id) => {
  try {
    return await axios.delete(`${API_URI}/api/admin/books/${id}`, {
      headers: {
        'x-access-token' : token
      }
    }).catch(err => {
      throw err;
    })
  } catch (err) {
    throw err;
  }
}

/* SALES */

export const getSalesList = async (token) => {
  try {
    return await axios.get(`${API_URI}/api/sales/admin`, {
      headers: {
        'x-access-token' : token
      }
    }).catch(err => {
      throw err;
    })
  } catch (err) {
    throw err;
  }
}

export const createNewSale = async (data, id) => {

  try {
    return await axios.post(`${API_URI}/api/books/${id}`, data).catch(err => {
      throw err;
    })
  } catch (err) {
    if (err.response) {
      return {
        status: err.response.status,
        data: err.response.data
      }
    } else {
      throw err;
    }
  }
}
