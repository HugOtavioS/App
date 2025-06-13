import React from '/node_modules/react';
import ButtonHome from './buttons/buttonHome';
import ButtonAbout from './buttons/buttonAbout';
import ButtonLogin from './buttons/buttonLogin';
import ButtonPhone from './buttons/buttonPhone';
import ButtonRegister from './buttons/buttonRegister';
import { jsx as _jsx, jsxs as _jsxs } from "react/jsx-runtime";
function Footer() {
  return /*#__PURE__*/_jsxs("footer", {
    className: "flex justify-between gap-12 w-full bg-[#D4C9BE] px-16 py-12",
    children: [/*#__PURE__*/_jsx("div", {
      className: "",
      children: /*#__PURE__*/_jsx("p", {
        children: "\xA9 2023 Appy. Todos os direitos reservados."
      })
    }), /*#__PURE__*/_jsxs("div", {
      className: "flex gap-2",
      children: [/*#__PURE__*/_jsx(ButtonHome, {
        link: "/home",
        className: "hover:-translate-y-[2px] hover:bg-[#f1efec]/60 duration-150"
      }), /*#__PURE__*/_jsx(ButtonAbout, {
        link: "/about",
        className: "hover:-translate-y-[2px] hover:bg-[#f1efec]/60 duration-150"
      }), /*#__PURE__*/_jsx(ButtonPhone, {
        link: "/contacts",
        className: "hover:-translate-y-[2px] hover:bg-[#f1efec]/60 duration-150"
      }), /*#__PURE__*/_jsx(ButtonLogin, {
        link: "/login",
        className: "hover:-translate-y-[2px] hover:bg-[#f1efec]/60 duration-150"
      }), /*#__PURE__*/_jsx(ButtonRegister, {
        link: "/register",
        className: "hover:-translate-y-[2px] hover:bg-[#f1efec]/60 duration-150"
      })]
    }), /*#__PURE__*/_jsx("div", {
      className: "",
      children: /*#__PURE__*/_jsxs("p", {
        children: ["Desenvolvido por ", /*#__PURE__*/_jsx("a", {
          href: "https://github.com/HugOtavioS",
          className: "text-[18px] underline",
          children: "Hugo Ot\xE1vio dos Santos"
        })]
      })
    })]
  });
}
export default Footer;