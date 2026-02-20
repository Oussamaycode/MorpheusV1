export default function Home() {
    return (
        <div style={{ padding: "40px" }}>
            <h1>🚀 My Cloud Gaming Platform</h1>
            <p>Welcome Oussama 👋</p>

            <button
                onClick={() => alert("Instance Starting...")}
                style={{
                    padding: "10px 20px",
                    background: "black",
                    color: "white",
                    border: "none",
                    cursor: "pointer"
                }}
            >
                Start Instance
            </button>
        </div>
    );
}