import instance from "../axiosConfig";

export const apiCategies = async () => {
  try {
    const categories = await instance({
      method: "get",
      url: "/categories",
    });
    return categories?.data;
  } catch (error) {
    throw error.categories?.data || error;
  }
};