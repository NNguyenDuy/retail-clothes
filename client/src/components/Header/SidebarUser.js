import React from "react";
import { pathsUser } from "../../ultis/constant";
import { Link, NavLink } from "react-router-dom";

const SidebarUser = () => {
  return (
    <div className="">
      <div className="flex w-full items-center gap-5 rounded-tl-lg bg-white py-10 shadow-sm">
        <Link
          to={"*"}
          className="-ml-4 flex h-24 w-24 items-center justify-center rounded-full bg-bgBlackGray text-4xl font-bold text-white"
        >
          User
        </Link>
        <div>
          <p>Hi,</p>
          <p className="font-bold">name</p>
        </div>
      </div>
      <div className="w-full rounded-bl-lg bg-white shadow-md">
        <ul className="flex flex-col justify-center">
          {pathsUser.map((item, index) => {
            return (
              item?.show && (
                <NavLink key={index} to={item.path}>
                  {item.value}
                </NavLink>
              )
            );
          })}
        </ul>
      </div>
    </div>
  );
};

export default SidebarUser;
