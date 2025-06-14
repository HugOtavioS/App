import React from '/node_modules/react';
import {Card, CardFooter} from "/node_modules/@heroui/card";

function CardHome({ contentBody, contentButton, className }) {
    return (
        <Card isFooterBlurred className={`border border-[#D4C9BE] rounded-3xl p-12 ${contentButton ? "pb-15" : ""} w-112 min-h-20 ${className}`} radius="lg">
            <p className="">
                {contentBody}
            </p>
            {contentButton ? <CardFooter className="justify-center before:bg-white/10 border-white/20 border-1 overflow-hidden py-1 absolute before:rounded-xl bottom-4 w-fit left-[50%] -translate-x-[50%] rounded-lg shadow-small z-10">
                <p className="text-tiny text-black/80">{contentButton}</p>
            </CardFooter> : ""}
        </Card>
    );
}

export default CardHome;