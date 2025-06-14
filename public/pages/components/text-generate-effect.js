import { useEffect } from "react";
import { motion, useAnimation } from "framer-motion";
import { cn } from "./lib/utils.ts";
import { jsxs as _jsxs, jsx as _jsx } from "react/jsx-runtime";
export const TextGenerateEffect = ({
  words,
  className
}) => {
  const controls = useAnimation();
  useEffect(() => {
    controls.start({
      opacity: 1,
      transition: {
        duration: 1,
        ease: "easeInOut"
      }
    });
  }, [controls]);
  const renderWords = () => {
    return words.split(" ").map((word, idx) => {
      return /*#__PURE__*/_jsxs(motion.span, {
        className: "opacity-0",
        initial: {
          opacity: 0
        },
        animate: controls,
        transition: {
          duration: 0.4,
          delay: idx * 0.1
        },
        children: [word, " "]
      }, word + idx);
    });
  };
  return /*#__PURE__*/_jsx("div", {
    className: cn("font-bold", className),
    children: /*#__PURE__*/_jsx("div", {
      className: "mt-4",
      children: renderWords()
    })
  });
};