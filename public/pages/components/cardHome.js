import React from '/node_modules/react';
import { Card, CardFooter } from "/node_modules/@heroui/card";
import { jsx as _jsx, jsxs as _jsxs } from "react/jsx-runtime";
function CardHome({
  contentBody,
  contentButton,
  className
}) {
  return /*#__PURE__*/_jsxs(Card, {
    isFooterBlurred: true,
    className: `border border-[#D4C9BE] rounded-3xl p-12 ${contentButton ? "pb-15" : ""} w-112 min-h-20 ${className}`,
    radius: "lg",
    children: [/*#__PURE__*/_jsx("p", {
      className: "",
      children: contentBody
    }), contentButton ? /*#__PURE__*/_jsx(CardFooter, {
      className: "justify-center before:bg-white/10 border-white/20 border-1 overflow-hidden py-1 absolute before:rounded-xl bottom-4 w-fit left-[50%] -translate-x-[50%] rounded-lg shadow-small z-10",
      children: /*#__PURE__*/_jsx("p", {
        className: "text-tiny text-black/80",
        children: contentButton
      })
    }) : ""]
  });
}
export default CardHome;