import actionsType from "./actionsType";
import { apiCategies } from "../../services";

export const getCategories = () => async (dispatch) => {
  try {
    const data = await apiCategies();
    const { categories } = data;
    dispatch({
      type: actionsType.GET_CATEGORIES,
      data: categories || null,
    });
  } catch (error) {
    dispatch({
      type: actionsType.GET_CATEGORIES,
      data: null,
    });
  }
};
