import React from '/node_modules/react';
import ButtonHome from './buttons/buttonHome';
import ButtonAbout from './buttons/buttonAbout';
import ButtonLogin from './buttons/buttonLogin';
import ButtonPhone from './buttons/buttonPhone';
import ButtonRegister from './buttons/buttonRegister';

function Footer() {
    return (
        <footer className='flex justify-between gap-12 w-full bg-[#06202B] px-16 py-12 text-white'>
            <div className="">
                <p>© 2023 Appy. Todos os direitos reservados.</p>
            </div>
            <div className="flex gap-2 text-black">
                <ButtonHome
                    link={"/"}
                    className={"hover:-translate-y-[2px] hover:bg-[#f1efec]/60 duration-150"}
                />
                <ButtonAbout
                    link={"/about"}
                    className={"hover:-translate-y-[2px] hover:bg-[#f1efec]/60 duration-150"}
                />
                <ButtonPhone
                    link={"/contacts"}
                    className={"hover:-translate-y-[2px] hover:bg-[#f1efec]/60 duration-150"}
                />
                <ButtonLogin
                    link={"/login"}
                    className={"hover:-translate-y-[2px] hover:bg-[#f1efec]/60 duration-150"}
                />
                <ButtonRegister
                    link={"/register"}
                    className={"hover:-translate-y-[2px] hover:bg-[#f1efec]/60 duration-150"}
                />
            </div>
            <div className="">
                <p>Desenvolvido por <a href="https://github.com/HugOtavioS" className='text-[18px] underline'>Hugo Otávio dos Santos</a></p>
            </div>
        </footer>
    );
}

export default Footer;