import React from 'react';
import { createRoot } from 'react-dom/client';
import GraphWidget from './components/GraphWidget';

const rootElement = document.querySelector('#dashboard-widget-container');
const root = createRoot(rootElement);

root.render(<GraphWidget />);
