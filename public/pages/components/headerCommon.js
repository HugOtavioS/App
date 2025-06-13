import React from '/node_modules/react';
import { jsx as _jsx, jsxs as _jsxs } from "react/jsx-runtime";
function HeaderCommon() {
  return /*#__PURE__*/_jsx("header", {
    className: "fixed flex justify-center items-center gap-1 top-3 left-[50%] -translate-x-[50%] bg-[#D4C9BE]/50 backdrop-blur backdrop-saturate-10 z-100 rounded-3xl w-fit px-10 p-6",
    children: /*#__PURE__*/_jsx("nav", {
      children: /*#__PURE__*/_jsxs("ul", {
        className: "flex gap-4",
        children: [/*#__PURE__*/_jsx("li", {
          children: /*#__PURE__*/_jsx("a", {
            href: "/",
            className: "hover:bg-[#F1EFEC]/75 p-1 px-4 rounded-lg duration-200",
            children: "In\xEDcio"
          })
        }), /*#__PURE__*/_jsx("li", {
          children: /*#__PURE__*/_jsx("a", {
            href: "/about",
            className: "hover:bg-[#F1EFEC]/75 p-1 px-4 rounded-lg duration-200",
            children: "Sobre"
          })
        }), /*#__PURE__*/_jsx("li", {
          children: /*#__PURE__*/_jsx("a", {
            href: "/contact",
            className: "hover:bg-[#F1EFEC]/75 p-1 px-4 rounded-lg duration-200",
            children: "Contato"
          })
        }), /*#__PURE__*/_jsx("li", {
          children: /*#__PURE__*/_jsx("a", {
            href: "/login",
            className: "hover:bg-[#F1EFEC]/75 p-1 px-4 rounded-lg duration-200",
            children: "Entrar"
          })
        }), /*#__PURE__*/_jsx("li", {
          children: /*#__PURE__*/_jsx("a", {
            href: "/register",
            className: "hover:bg-[#F1EFEC]/75 p-1 px-4 rounded-lg duration-200",
            children: "Registrar"
          })
        })]
      })
    })
  });
}
export default HeaderCommon;