import { jsx as _jsx, jsxs as _jsxs } from "react/jsx-runtime";
import { ErrorMessage, InputField, InputWrapper, Label } from "./styles";
export const CustomInput = ({ name, label, value, customRef, onChange, placeholder = "", type = "text", error, ...rest }) => {
    return (_jsxs(InputWrapper, { children: [_jsx(Label, { htmlFor: name, children: label }), _jsx(InputField, { name: name, type: type, value: value, ref: customRef, onChange: onChange, placeholder: placeholder, ...rest }), error && _jsx(ErrorMessage, { children: error })] }));
};
