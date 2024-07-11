import React, { useEffect } from "react";
import { Outlet } from "react-router-dom";
import { ToastContainer } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";
import { Header } from "../../components";
import { useDispatch, useSelector } from "react-redux";
import * as actions from "../../store/actions";
import HashLoader from "react-spinners/HashLoader";

const Home = () => {
  const dispatch = useDispatch();
  const { categoriesData } = useSelector((state) => state.app);

  useEffect(() => {
    dispatch(actions.getCategories());
  }, [dispatch]);

  if (categoriesData.length === 0) {
    return (
      <div className="flex h-screen items-center justify-center">
        <HashLoader
          size="70"
          speedMultiplier="3"
          color="rgba(139, 165, 250, 0.5)"
        />
      </div>
    );
  }

  return (
    <div className="">
      <ToastContainer />
      <Header />
      <Outlet />
    </div>
  );
};

export default Home;
