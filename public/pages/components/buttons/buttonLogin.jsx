import React from '/node_modules/react';
import { SignIn } from '/node_modules/@phosphor-icons/react';

function ButtonLogin({ link, contentButton, type = "button", size = 32, className }) {
    return (
        <button type={type} className={`${className} bg-[#f1efec]/50 shadow-sm rounded-xl`}>
            {link
            ?
                <a href={link} className={`block max-w-fit max-h-fit p-2`}>
                    <SignIn size={size} />
                    {contentButton}
                </a>
            :
                <div className="p-2">
                    <SignIn size={size} />
                    {contentButton}
                </div>
            }
        </button>
    );
}

export default ButtonLogin;