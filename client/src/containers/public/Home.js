import React, { useEffect } from "react";
import { Outlet } from "react-router-dom";
import { ToastContainer } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";
import { Header } from "../../components";
import { useDispatch } from "react-redux";
import * as actions from "../../store/actions";

const Home = () => {
  
  const dispatch = useDispatch();
  useEffect(() => {
    dispatch(actions.getCategories());
  }, [dispatch]);

  return (
    <div className="">
      <ToastContainer />
      <Header />
      <Outlet />
    </div>
  );
};

export default Home;
