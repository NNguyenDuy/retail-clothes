import React from "react";
import RenderRoutes from "./components/Header/RenderRoutes";
import AnimatedCursor from "react-animated-cursor";
function App() {
  return (
    <main className="relative w-full">
      <AnimatedCursor
        innerStyle={{
          backgroundColor: "rgba(139, 165, 250, 0.5)",
          zIndex: 9999,
        }}
        outerStyle={{
          backgroundColor: "rgba(103, 131, 225, 0.202)",
          zIndex: 9999,
        }}
        outerScale={2}
        innerSize={17}
        outerSize={17}
      />
      <RenderRoutes />
    </main>
  );
}

export default App;
