"use client";

import React from "react";
import { motion, useAnimationFrame, useMotionTemplate, useMotionValue, useTransform } from "/node_modules/motion/react";
import { useRef } from "/node_modules/react";
import { cn } from "../lib/utils.ts";
import { jsx as _jsx, jsxs as _jsxs, Fragment as _Fragment } from "react/jsx-runtime";
export function Button({
  borderRadius = "1.75rem",
  children,
  as: Component = "button",
  containerClassName,
  borderClassName,
  duration,
  className,
  ...otherProps
}) {
  return /*#__PURE__*/_jsxs(Component, {
    className: cn("relative h-16 w-fit min-w-40 overflow-hidden bg-transparent p-[1px] text-xl", containerClassName),
    style: {
      borderRadius: borderRadius
    },
    ...otherProps,
    children: [/*#__PURE__*/_jsx("div", {
      className: "absolute inset-0",
      style: {
        borderRadius: `calc(${borderRadius} * 0.96)`
      },
      children: /*#__PURE__*/_jsx(MovingBorder, {
        duration: duration,
        rx: "30%",
        ry: "30%",
        children: /*#__PURE__*/_jsx("div", {
          className: cn("h-20 w-20 bg-[radial-gradient(#0ea5e9_40%,transparent_60%)] opacity-[0.8]", borderClassName)
        })
      })
    }), /*#__PURE__*/_jsx("div", {
      className: cn("relative flex h-full w-full items-center justify-center border border-slate-800 bg-slate-900/[0.8] text-sm text-white antialiased backdrop-blur-xl", className),
      style: {
        borderRadius: `calc(${borderRadius} * 0.96)`
      },
      children: children
    })]
  });
}
export const MovingBorder = ({
  children,
  duration = 3000,
  rx,
  ry,
  ...otherProps
}) => {
  const pathRef = useRef();
  const progress = useMotionValue(0);
  useAnimationFrame(time => {
    const length = pathRef.current?.getTotalLength();
    if (length) {
      const pxPerMillisecond = length / duration;
      progress.set(time * pxPerMillisecond % length);
    }
  });
  const x = useTransform(progress, val => pathRef.current?.getPointAtLength(val).x);
  const y = useTransform(progress, val => pathRef.current?.getPointAtLength(val).y);
  const transform = useMotionTemplate`translateX(${x}px) translateY(${y}px) translateX(-50%) translateY(-50%)`;
  return /*#__PURE__*/_jsxs(_Fragment, {
    children: [/*#__PURE__*/_jsx("svg", {
      xmlns: "http://www.w3.org/2000/svg",
      preserveAspectRatio: "none",
      className: "absolute h-full w-full",
      width: "100%",
      height: "100%",
      ...otherProps,
      children: /*#__PURE__*/_jsx("rect", {
        fill: "none",
        width: "100%",
        height: "100%",
        rx: rx,
        ry: ry,
        ref: pathRef
      })
    }), /*#__PURE__*/_jsx(motion.div, {
      style: {
        position: "absolute",
        top: 0,
        left: 0,
        display: "inline-block",
        transform
      },
      children: children
    })]
  });
};