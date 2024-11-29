import { jsx as _jsx, jsxs as _jsxs, Fragment as _Fragment } from "react/jsx-runtime";
import { useState } from "react";
import "./App.css";
import { CustomInput } from "./components/customInput";
import CustomPagination from "./components/customPagination";
function App() {
    const [name, setName] = useState("");
    const [date, setDate] = useState();
    const onChangeNameInput = (e) => {
        setName(e.target.value);
    };
    const onChangeDateInput = (e) => {
        setDate(new Date(e.target.value));
    };
    const onSubmit = () => {
        console.log(name, date);
    };
    return (_jsxs(_Fragment, { children: [_jsxs("form", { onSubmit: onSubmit, children: [_jsx(CustomInput, { name: "name", label: "Nome", value: name, error: name.length < 7 ? "Nome deve ser maior que 7 caracteres" : "", placeholder: "Digite o nome", onChange: onChangeNameInput }), _jsx(CustomInput, { name: "date", label: "Data de nascimento", type: "date", placeholder: "Digite a data de nascimento", value: date?.toISOString().split("T")[0] ?? "", onChange: onChangeDateInput }), _jsx("button", { type: "submit", children: "Enviar" })] }), _jsx(CustomPagination, { currentPage: 1, totalPages: 10, onPageChange: () => { } })] }));
}
export default App;
