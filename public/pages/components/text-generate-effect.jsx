import { useEffect } from "react";
import { motion, useAnimation } from "framer-motion";
import { cn } from "./lib/utils.ts";

export const TextGenerateEffect = ({
  words,
  className,
}) => {
  const controls = useAnimation();

  useEffect(() => {
    controls.start({
      opacity: 1,
      transition: {
        duration: 1,
        ease: "easeInOut",
      },
    });
  }, [controls]);

  const renderWords = () => {
    return words.split(" ").map((word, idx) => {
      return (
        <motion.span
          key={word + idx}
          className="opacity-0"
          initial={{ opacity: 0 }}
          animate={controls}
          transition={{
            duration: 0.4,
            delay: idx * 0.1,
          }}
        >
          {word}{" "}
        </motion.span>
      );
    });
  };

  return (
    <div className={cn("font-bold", className)}>
      <div className="mt-4">
        {renderWords()}
      </div>
    </div>
  );
};
