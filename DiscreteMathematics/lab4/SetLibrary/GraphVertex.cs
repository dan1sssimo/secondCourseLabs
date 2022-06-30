using System;
using System.Collections.Generic;
using System.Drawing;
using System.Text;

namespace SetLibrary
{
    public class GraphVertex
    {
        public string Name { get; }

        public Rectangle Rectangle { get; set; }

        public Color Color { get; set; }

        public List<GraphEdge> Edges { get; }

        public GraphVertex(string vertexName, Rectangle rectangle)
        {
            Name = vertexName;
            Edges = new List<GraphEdge>();
            Rectangle = rectangle;
            Color = Color.FromArgb(0, 0, 0);
        }

        public void AddEdge(GraphEdge newEdge)
        {
            var edge = Edges.Find(e => e.ConnectedVertex.Name == newEdge.ConnectedVertex.Name);
            if (edge == null)
                Edges.Add(newEdge);
        }
        
        public void RemoveEdge(GraphEdge Edge)
        {
            Edges.Remove(Edge);
        }


        public void AddEdge(GraphVertex vertex, int edgeWeight)
        {
            AddEdge(new GraphEdge(vertex, edgeWeight));
        }

        public override string ToString() => Name;
    }
}
