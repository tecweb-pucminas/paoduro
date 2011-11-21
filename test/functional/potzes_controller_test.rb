require 'test_helper'

class PotzesControllerTest < ActionController::TestCase
  setup do
    @potze = potzes(:one)
  end

  test "should get index" do
    get :index
    assert_response :success
    assert_not_nil assigns(:potzes)
  end

  test "should get new" do
    get :new
    assert_response :success
  end

  test "should create potze" do
    assert_difference('Potze.count') do
      post :create, :potze => @potze.attributes
    end

    assert_redirected_to potze_path(assigns(:potze))
  end

  test "should show potze" do
    get :show, :id => @potze.to_param
    assert_response :success
  end

  test "should get edit" do
    get :edit, :id => @potze.to_param
    assert_response :success
  end

  test "should update potze" do
    put :update, :id => @potze.to_param, :potze => @potze.attributes
    assert_redirected_to potze_path(assigns(:potze))
  end

  test "should destroy potze" do
    assert_difference('Potze.count', -1) do
      delete :destroy, :id => @potze.to_param
    end

    assert_redirected_to potzes_path
  end
end
