pragma solidity ^0.4.0;

contract SimpleStorage {

	uint public storedData;
	address public owner;
	uint public value; //New

constructor(uint x_) public {
		owner = msg.sender;
    storedData = x_;
}

modifier onlyOwner() {
		require(msg.sender==owner);
		_;
}

//New:
modifier paid(){
    require(msg.sender==owner||msg.value>= 1000000000000000000);
    _;
}

function set(uint x) public paid payable {
    storedData = x;
	  value = msg.value;
    owner.transfer(value);
}

function done() onlyOwner public {
	selfdestruct(owner);
}

function get() public view returns (uint) {
	return storedData;
}

function() public payable {}

}
