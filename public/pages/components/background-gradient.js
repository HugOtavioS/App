import React from "react";
import { cn } from "./lib/utils.ts";
import { jsx as _jsx, jsxs as _jsxs } from "react/jsx-runtime";
export const BackgroundGradient = ({
  children,
  className,
  containerClassName,
  animate = true
}) => {
  return /*#__PURE__*/_jsxs("div", {
    className: cn("relative p-[4px] group", containerClassName),
    children: [/*#__PURE__*/_jsx("div", {
      className: cn("absolute inset-0 rounded-[22px] z-[1] opacity-60 group-hover:opacity-100 blur-xl  transition duration-500", animate && "animate-pulse", "bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-[#06202B] to-[#D4C9BE]")
    }), /*#__PURE__*/_jsx("div", {
      className: cn("relative z-[2] rounded-[20px]", className),
      children: children
    })]
  });
};