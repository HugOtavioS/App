import React from '/node_modules/react';
import { HouseSimple } from '/node_modules/@phosphor-icons/react';
import { jsx as _jsx, jsxs as _jsxs } from "react/jsx-runtime";
function ButtonHome({
  link,
  contentButton,
  type = "button",
  size = 32,
  className
}) {
  return /*#__PURE__*/_jsx("button", {
    type: type,
    className: `${className} bg-[#f1efec]/50 shadow-sm rounded-xl`,
    children: link ? /*#__PURE__*/_jsxs("a", {
      href: link,
      className: `block max-w-fit max-h-fit p-2`,
      children: [/*#__PURE__*/_jsx(HouseSimple, {
        size: size
      }), contentButton]
    }) : /*#__PURE__*/_jsxs("div", {
      className: "p-2",
      children: [/*#__PURE__*/_jsx(HouseSimple, {
        size: size
      }), contentButton]
    })
  });
}
export default ButtonHome;