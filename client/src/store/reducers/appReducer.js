import actionsType from "../actions/actionsType";

const initState = {
  categoriesData: [],
};

const appReducer = (state = initState, action) => {
  switch (action.type) {
    case actionsType.GET_CATEGORIES:
      return {
        ...state,
        categoriesData: action.data || [],
      };
    default:
      return state;
  }
};

export default appReducer;
