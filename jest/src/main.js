import { jsx as _jsx } from "react/jsx-runtime";
import { createRoot } from "react-dom/client";
import { ThemeProvider } from "styled-components";
import App from "./App.tsx";
import "./index.css";
import theme from "./theme.ts";
createRoot(document.getElementById("root")).render(_jsx(ThemeProvider, { theme: theme, children: _jsx(App, {}) }));
