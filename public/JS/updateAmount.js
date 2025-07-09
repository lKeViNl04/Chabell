function updateAmount(id,change) {
    const input = document.getElementById(`amountInput-${id}`);
    let currentValue = parseInt(input.value) || 1; // Asegurarse de que haya un valor numérico
    const minValue = parseInt(input.min) || 0;

    currentValue += change;

    if (currentValue < minValue) {
        currentValue = minValue; // No permitir valores menores al mínimo
    }

    input.value = currentValue;
}
