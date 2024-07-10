import actionsType from "../actions/actionsType";

const initState = {
  isLoggedIn: false,
  token: null,
  message: "",
  update: false,
};

const authReducer = (state = initState, action) => {
  switch (action.type) {
    default:
      return state;
  }
};

export default authReducer;
