import React from "react";
import { paths } from "../../ultis/constant";
import { Link, NavLink } from "react-router-dom";
import { useSelector } from "react-redux";
import { Dropdown, Menu } from "antd";
import { DownOutlined } from "@ant-design/icons";

const Header = () => {
  const { categoriesData } = useSelector((state) => state.app);

  const menuItems = (
    <Menu className="">
      {categoriesData.map((index) => (
        <Menu.Item key={index.id}>
          <NavLink
            className=" hover:!text-secondaryColor "
            to={"categories/" + index.Category_path}
          >
            {index.Name}
          </NavLink>
        </Menu.Item>
      ))}
    </Menu>
  );

  return (
    <div className="flex h-20 items-center justify-around">
      <Link to={"/"}>
        <img
          src="https://html-tokenbay.netlify.app/assets/images/header-logo.svg"
          alt=""
        />
      </Link>
      <ul className="flex gap-10">
        {paths.map(({ show, path, value }, index) => {
          if (show) {
            return (
              <li key={index} className="cursor-pointer ">
                <NavLink className={"underline-hover"} to={path}>
                  {value}
                </NavLink>
              </li>
            );
          } else return null;
        })}
        <li>
          <NavLink className={""} to={"/user"}>
            User
          </NavLink>
        </li>
        <Dropdown overlay={menuItems} className="cursor-pointer">
          <li onClick={(e) => e.preventDefault()} className=" cursor-pointer">
            Categories <DownOutlined id="dropdown-header" />
          </li>
        </Dropdown>
      </ul>
    </div>
  );
};

export default Header;
