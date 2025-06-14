import React from "react";
import { cn } from "./lib/utils.ts";

export const BackgroundBeams = ({ className }) => {
  return (
    <div
      className={cn(
        "absolute inset-0 z-0 overflow-hidden",
        className
      )}
    >
      <div
        className={cn(
          "absolute -top-[40rem] left-1/2 transform -translate-x-1/2",
          "mix-blend-normal",
          "opacity-30",
          "blur-[100px]",
          "[--beam-light:#D4C9BE]",
          "[--beam-dark:#06202B]",
          "bg-[radial-gradient(circle_800px_at_50%_400px,var(--beam-light),transparent_80%),radial-gradient(circle_600px_at_calc(50%-400px)_calc(100%-100px),var(--beam-dark),transparent_80%),radial-gradient(circle_600px_at_calc(50%+400px)_calc(100%-100px),var(--beam-dark),transparent_80%)]",
          "w-[80rem]",
          "h-[80rem]"
        )}
      />
    </div>
  );
};
